/**
 * @author re1kojote
 * @version 01-02-16
 *
 * Includes our search() and toggle() functions
 */

var entries;

function toggle(id) {
    'use strict';
    var e = document.getElementById(id);
    var p = e.previousElementSibling;

    if (e.hasAttribute("hidden")) e.removeAttribute("hidden");
    else e.setAttribute("hidden", "");

    if(p.hasAttribute("aria-checked")) p.removeAttribute("aria-checked");
    else p.setAttribute("aria-checked", "true");
}

function find(item, type) {
    if (item.length > 0) {
        for (var i = 0; i < item.length; i++) {
            for (var j = 0; j < entries.length; j++) {
                // Adds class "grade" to element if its content contains the keyword
                if (entries[j].getAttribute("content").indexOf("|" + item[i].id.substring(item[i].id.indexOf("-") + 1) + "|") > -1) entries[j].classList.add(type);
            }
        }
    } else {
        // Adds type to every entry
        for (var i = 0; i < entries.length; i++) entries[i].classList.add(type);
    }
}

function search() {
    'use strict';
    entries = document.getElementsByClassName("entry");

    var gd = document.querySelectorAll("input[id*=gd]:checked"),
        jg = document.querySelectorAll("input[id*=jg]:checked"),
        sj = document.querySelectorAll("input[id*=sj]:checked");

    for (var i = 0; i < entries.length; i++) {
        entries[i].setAttribute("hidden", "");
        entries[i].classList.remove("gd");
        entries[i].classList.remove("jg");
        entries[i].classList.remove("sj");
    }

    find(gd, "gd");
    find(jg, "jg");
    find(sj, "sj");

    for (var i = 0; i < entries.length; i++) {
        // Makes all elements containing all classes visible
        if (entries[i].classList.contains("jg") && entries[i].classList.contains("gd") && entries[i].classList.contains("sj")) entries[i].removeAttribute("hidden");
    }
}