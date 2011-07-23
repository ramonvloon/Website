function bbcode_ins(fieldId, tag) {
    var selected = '';
    var ins = '';
    var sel = '';
    var selected2 = '';
    var startPos = '';
    var endPos = '';
    field = document.getElementById(fieldId);
    if (tag == 'b' || tag == 'i' || tag == 'u') {
        if (document.selection) {
            field.focus();
            selected = document.selection.createRange().text;
            ins = '<' + tag + '>' + selected + '</' + tag + '>';
            selected2 = document.selection.createRange();
            sel = document.selection.createRange();
            selected2.moveStart('character', -field.value.length);
            sel.text = '<' + tag + '>' + selected + '</' + tag + '>';
            sel.moveStart('character', selected2.text.length + ins.length - selected.length);
        } else if (field.selectionStart || field.selectionStart == 0) {     //MOZILLA/NETSCAPE/SAFARI support
            startPos = field.selectionStart;
            endPos = field.selectionEnd;
            selected = field.value.substring(startPos, endPos);
            ins = '<' + tag + '>' + selected + '</' + tag + '>';
            field.focus();
            field.value = field.value.substring(0, startPos) + ins + field.value.substring(endPos, field.value.length);
            field.setSelectionRange(endPos+ins.length, endPos+ins.length-selected.length);
        }
    } else if (tag == 'img') {
        var path = prompt('fotos/');
        if (!path) {
            return;
        }
        var imagename = path.replace('fotos/', '');
        if (document.selection) {
            field.focus();
            selected = document.selection.createRange().text;
            ins = '<' + tag + ' src="' + path + '" alt="' + imagename + '" />';
            selected2 = document.selection.createRange();
            sel = document.selection.createRange();
            sel.text = '<' + tag + ' src="' + path + '" alt="' + imagename + '" />';
            selected2.moveStart ('character', -field.value.length);
            sel.moveStart('character', selected2.text.length + ins.length - selected.length);
        } else if (field.selectionStart || field.selectionStart == 0) {       //MOZILLA/NETSCAPE/SAFARI support
            startPos = field.selectionStart;
            endPos = field.selectionEnd;
            ins = '<' + tag + ' src="' + path + '" alt="' + imagename + '" />';
            field.focus();
            field.value = field.value.substring(0, startPos)
                + ins
                + field.value.substring(endPos, field.value.length);
            field.setSelectionRange(endPos+ins.length, endPos+ins.length-selected.length);
        }
    } else if (tag == 'url') {
        var url = prompt('http://refab.nl/index');
        var linkText = prompt('Voer de tekst in die u de link wilt geven.', '');
        if (!url || !linkText) {
            return;
        }
        if (document.selection) {
            field.focus();
            selected = document.selection.createRange().text;
            ins = '<a href="' + url + '">' + linkText + '</a>';
            selected2 = document.selection.createRange();
            sel = document.selection.createRange();
            sel.text = '<a href="' + url + '">' + linkText + '</a>';
            selected2.moveStart ('character', -field.value.length);
            sel.moveStart('character', selected2.text.length + ins.length - selected.length);
        } else if (field.selectionStart || field.selectionStart == 0) {       //MOZILLA/NETSCAPE/SAFARI support
            startPos = field.selectionStart;
            endPos = field.selectionEnd;
            ins = '<a href="' + url + '">' + linkText + '</a>';
            field.focus();
            field.value = field.value.substring(0, startPos)
                + ins
                + field.value.substring(endPos, field.value.length);
            field.setSelectionRange(endPos+ins.length, endPos+ins.length-selected.length);
        }
    }
}