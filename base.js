function $(id){
	return document.getElementById(id);
}

/*
	url: php file
	data username=value&password=pvalue
	method: get or post
	success: pass function as a parameter
	error: pass function as a parameter
*/

function $ajax({method = "get", url, data, success, error}){
	var xhr = null;

	/**Create an XMLHTTPRequest Object */
	try{
		xhr = new XMLHttpRequest();
	}catch(error){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if(data){
		data = querystring(data);
	}

	if(method == "get" & data != ""){
		url += "?" + data;
	}

	/**
	 * Specifies the HTTP method to use (GET OR POST), the target URL,
	 * and whether the request should be handled asynchronously (true or false)
	 */
	xhr.open(method, url, true);
	// console.log(url);
	if(method == "get"){
		xhr.send();
	}else{
		xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
		xhr.send(data);
	}

	xhr.onreadystatechange = function(){	
		/**readyState: the status of a request:
		 * 				0: uninitialized
		 * 				1: loading
		 * 				2: loaded
		 * 				3: interactive
		 * 				4: completed
		 */
		if(xhr.readyState == 4){
			//check the status
			if(xhr.status == 200){
				if(success){
					/**responseTest: the data returned by the server in text format*/
					success(xhr.responseText)
				}
				//console.log(xhr.responseText);
			}else{
				//alert("Error:"+xhr.status);
				if(error){
					error("Error:"+xhr.status);
				}
			}
		}
	}
}

/**
Convert an object to query string
username=value1&password=pvalue query string
*/
function querystring(obj){
	var str = "";
	for(var key in obj){
		str += key + "="+obj[key] + "&";
	}
	return str.substring(0, str.length-1);
}

