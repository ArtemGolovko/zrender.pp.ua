function arrayRandom(array){
return array[Math.floor(Math.random() * array.length)];
}
function objectRandom(object){
return object[Object.keys(object)[Math.floor(Math.random() * Object.keys(object).length)]];
}
/* var nan = {timecreated: "22.11.2019 - 20.20", meta: "test", change: true, type: "Object", changes: {v1: {lastname: "NaN", newname: "nan", timechanges: "22.11.2019 - 20:27", metachange: "Name 'NaN' be as a keyword" }, v2: {timechanges: "22.11.2019 - 20:32", metachange: "Add versions" }}};
my vareable data type
like this:
var config = true;
"user enter wrong password"
config = false;
var var_data = {config: {timecreated: "22.11.2019 - 20.20", meta: "needly date for a program", change: true, type: "bool", data: true, changes: {v1: {timechanges: "22.11.2019 - 20:27", metachange: "needly data for a program", lastdata: true, newdata: false }}}};
*/