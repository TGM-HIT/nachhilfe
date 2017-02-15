function init_controller() {
    'use strict';
    persons.forEach(function (p) {
        // Gets ul & creates elements
        var ul = document.getElementById('student-list'),
            li = document.createElement('li'),
            input = document.createElement('input'),
            label = document.createElement('label'),
            span = document.createElement('span'),
            h3 = document.createElement('h3'),
            div = document.createElement('div'),
            name = document.createElement('h4'),
            grade = document.createElement('li'),
            info = document.createElement('li'),
            subs = document.createElement('li'),
            price = document.createElement('li');

        // Sets attributes
        input.setAttribute("type", "checkbox");
        input.setAttribute("id", p.firstName + p.lastName);
        label.setAttribute("for", p.firstName + p.lastName);
        // Appends text to nodes
        span.appendChild(document.createTextNode(" - " + p.grade + " / " + p.subjects));
        h3.appendChild(document.createTextNode(p.firstName + " " + p.lastName));
        h3.appendChild(span);
        grade.appendChild(document.createTextNode(p.grade));
        info.appendChild(document.createTextNode(p.infoText));
        subs.appendChild(document.createTextNode(p.subjects));
        price.appendChild(document.createTextNode(p.price));
        // Appends elements to label
        label.appendChild(h3);
        // Appends elements to div
        div.appendChild(grade);
        div.appendChild(info);
        div.appendChild(subs);
        div.appendChild(price);
        // Appends elements to node
        li.appendChild(input);
        li.appendChild(label);
        li.appendChild(div);
        // Appends nodes to our list
        ul.appendChild(li);
    });
}