function fetchJSONData(filename) {
    fetch(filename)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();  
        })
        .catch(error => console.error('Failed to fetch data:', error)); 
}

function echo_list(section_id) {
    str = "<ul>"
    data = fetchJSONData("/files/" + section_id + "/" + section_id + ".json")[section_id];
    for (const item of data) {
        str += "<li>";
        authors = item.authors;
        authors[authors.indexOf("Rose Enos")] = "<u>Rose Enos</u>";
        if (authors.length == 2)
            str += authors.join(" and ") + ".";
        else if (authors.length > 2)
            str += authors.slice(0,-1).join(", ") + ", and " + authors[-1] + ".";
        if ("internal" in data)
            str += " <a href=\"" + data.internal + "\" target=\"_blank\">" + data.title + "</a>.";
        else
            str += " " + data.title + ".";
        if ("venue" in data)
            str += " <i>" + data.venue + "</i>" + ("date" in data) ? "," : ".";
        if ("date" in data)
            str += " " + data.date + ".";
        if ("external" in data)
            str += " (<a href=\"" + data.external + "\" target=\"_blank\">external</a>)";
        str += "</li>";
    }
    str += "</ul>";
    document.getElementById(section_id).innerHTML += str;
}