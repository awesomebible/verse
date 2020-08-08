exports.handler = async (event, context) =>
{
	var now = new Date();
	var start = new Date(now.getFullYear(), 0, 0);
	var diff = now - start;
	var oneDay = 1000 * 60 * 60 * 24;
	var day = Math.floor(diff / oneDay);

	const location = "https://cdn.statically.io/img/raw.githubusercontent.com/awesomebible/verse/master/img/" + day + ".jpg?f=auto"

	return {
		statusCode: 302,
		headers:
		{
			'Location': location
		},
	}
}
