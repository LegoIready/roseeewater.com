const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const myself = "Rose Enos";

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
        for (i=0; i<authors.length; ++i)
            if (authors[i] == myself)
                authors[i] = `<u>${myself}</u>`;
            else if (authors[i] in sites)
                // problem: these keys are "firstname"
                authors[i] = `<a href="${sites[authors[i]]}" target="_blank">${authors[i]}</a>`;
        if (authors.length == 2)
            str += authors.join(" and ") + ".";
        else if (authors.length > 2)
            str += authors.slice(0,-1).join(", ") + ", and " + authors[-1] + ".";
        if ("internal" in item)
            str += " <a href=\"" + item.internal + "\" target=\"_blank\">" + item.title + "</a>.";
        else
            str += " " + item.title + ".";
        if ("venue" in item)
            str += " <i>" + item.venue + "</i>" + (("date" in item || "vol" in item) ? "," : ".");
        if ("vol" in item)
            str += " vol. " + item.vol + (("date" in item || "no" in item) ? "," : ".");
        if ("no" in item)
            str += " no. " + item.no + (("date" in item) ? "," : ".");
        if ("date" in item) {
            if ("day" in item.date)
                str += " " + item.date.day;
            if ("month" in item.date)
                str += " " + months[item.date.month-1];
            str += " " + item.date.year + ".";
        }
        if ("external" in item)
            str += " (<a href=\"" + item.external + "\" target=\"_blank\">external</a>)";
        if ("comments" in item)
            str += "<ul><li>" + item.comments.join("</li><li>") + "</li></ul>";
        str += "</li>";
    }
    str += "</ul>";
    document.getElementById(section_id).innerHTML += str;
}