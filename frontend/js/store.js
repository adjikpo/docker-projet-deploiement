/*jshint unused:false */

(function (exports) {
	
	'use strict';
	
	var STORAGE_KEY = 'todos-vuejs';
	exports.todoStorage = {
		fetch: function () {
			return fetch('http://backend.docker.localhost')
			.then(response => response.json())
			.then(data => {return data});
		},
		save: function (todos) {
			localStorage.setItem(STORAGE_KEY, JSON.stringify(todos));
		}
	};



})(window);
