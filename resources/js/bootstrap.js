try {
	import('bootstrap');
	window.$ = window.jQuery = require('jquery');
/*
	const axios = require('axios');
	axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
	axios.defaults.baseURL = process.env.MIX_API_URL;
//	axios.defaults.withCredentials = false;
	window.axios = axios;
*/
} catch (e) {
	console.error(e)
}
