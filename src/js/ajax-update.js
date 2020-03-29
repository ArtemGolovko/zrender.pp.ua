$(document).ready(function(){
	$("a").click(function (e) {
    		//e.preventdefault();
    		var url = $(this).attr("href");
    		$.ajax({
        		url: url,
        		type: "post",
        		success: function (result) {
            			var doc = new DOMParser().parseFromString(result, 'text/html');
            			document.head.innerHTML = doc.head.innerHTML;
            			document.body.innerHTML = doc.body.innerHTML;
       			},
        		error: () => alert("error")
    		});
   		return false;
	});
});
