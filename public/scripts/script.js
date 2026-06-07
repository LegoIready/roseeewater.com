function echo_list(section_id) {
    fetch("/files/" + section_id + "/" + section_id + ".json")
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();  
        })
        .then(data => generate_list(section_id, data))
        .catch(error => console.error('Failed to fetch data:', error)); 
}

function generate_list(section_id, data) {
    str = "<ul>"
    for (const item of data[section_id]) {
        str += "<li>";
        authors = item.authors;
        authors[authors.indexOf("Rose Enos")] = "<u>Rose Enos</u>";
        if (authors.length == 2)
            str += authors.join(" and ") + ".";
        else if (authors.length > 2)
            str += authors.slice(0,-1).join(", ") + ", and " + authors[-1] + ".";
        if ("internal" in item)
            str += " <a href=\"" + item.internal + "\" target=\"_blank\">" + item.title + "</a>.";
        else
            str += " " + item.title + ".";
        if ("venue" in item)
            str += " <i>" + item.venue + "</i>" + ("date" in item) ? "," : ".";
        if ("date" in item)
            str += " " + item.date + ".";
        if ("external" in item)
            str += " (<a href=\"" + item.external + "\" target=\"_blank\">external</a>)";
        str += "</li>";
    }
    str += "</ul>";
    document.getElementById(section_id).innerHTML += str;
}