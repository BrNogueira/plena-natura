<?php
function getCategoryName($categoryId){
	return \App\Category::where('id', $categoryId)->first()->name;
}

function getCategorySlug($categoryId){
	return \App\Category::where('id', $categoryId)->first()->color;
}