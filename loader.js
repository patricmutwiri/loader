function geturl(url,div) {
	jQuery('#'+div).load(url);
	console.log(' hi '+url);
}