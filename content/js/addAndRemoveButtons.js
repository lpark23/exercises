var nextId = 0;
var nextId2 = 0;
function addPcLanguage() {
    nextId++;
    var pcDiv = document.createElement('div');
    pcDiv.setAttribute('id', 'pc-lang' + nextId);
    pcDiv.innerHTML = '<input class="form-control" type="text" name="pc-lang[]"/>' + ' <select class="form-control" name="pc-level[]">' + '<option value="Beginner">Beginner</option>' + '<option value="Programmer">Programmer</option>' + '<option value="Ninja">Ninja</option>' + '</select>'
    document.getElementById('pclang-box').appendChild(pcDiv);

}

function removePcLanguage(id) {
    nextId--;
    var pcDiv = document.getElementById(id);
    document.getElementById('pclang-box').removeChild(pcDiv);
}

function addLanguage() {
    nextId2++;
    var langDiv = document.createElement('div');
    langDiv.setAttribute('id', 'lang' + nextId2);
    langDiv.innerHTML = '<input class="form-control" type="text" name="lang[]"/>' + ' <select class="form-control" name="con-level[]">' + '<option>-Conception-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>' + ' <select class="form-control" name="read-level[]">' + '<option>-Reading-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>' + ' <select  class="form-control" name="write-level[]">' + '<option>-Writing-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>';
    document.getElementById('lang-box').appendChild(langDiv);
}

function removeLanguage(id) {
    nextId2--;
    var langDiv = document.getElementById(id);
    document.getElementById('lang-box').removeChild(langDiv);
}

