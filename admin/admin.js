//load initial landing page
$(document).ready(function() {


$("div#renderDiv").load('http://localhost/BrytWeb.COM01/brytweb-wms');


});







$('#content').click(function(){

$("#contentModal").modal('show');



});
$('#homeland').click(function(){

$("#contentModal").modal('hide');
$("#processingModal").modal('show');
$("div#renderDiv").load('admin/cms/home/home.html', 2000, function() {
// callback after load completes
$('#editor').load('home.html');
$("#processingModal").modal('hide');
});




});
$('#about').click(function(){

$("#contentModal").modal('hide');
$("#processingModal").modal('show');

$("div#renderDiv").load('admin/cms/about/about.html', 2000, function() {
// callback after load completes
$('#editor').load('about.html');
$("#processingModal").modal('hide');
});



});





$('#contact').click(function(){

$("div#renderDiv").load('admin/cms/contact/contact.html');

$("#contentModal").modal('hide');

});



// start addproject section for portfolio type website
$('#portfolioAdmin').click(function(){

$("div#renderDiv").load('admin/cms/portfolio/addproject.html');

$("#contentModal").modal('hide');

});
// end addproject section for portfolio type website


//blog menu button for blog type website
$('#blogAdmin').click(function(){

$("div#renderDiv").load('admin/cms/blog/createblog.html');

$("#contentModal").modal('hide');

});






//portfolio menu button for portfolio type website

$('#createPageAdmin').click(function(){

$("div#renderDiv").load('admin/cms/createpage.html');

$("#createPageModal").modal('hide');

});






//store menu button for ecommerce type website

// store scripts starts here
$('#storeAdmin').click(function(){

$("div#renderDiv").load('admin/cms/store/store.html');

$("#contentModal").modal('hide');

});

//store scripts end here

// create page script ends



//start design code

$('#design').click(function(){

$("#designModal").modal('show');

});

// start header section
$('#header').click(function(){

$("div#renderDiv").load('admin/cms/header/header.html');

$("#designModal").modal('hide');

});

// start footer section
$('#footer').click(function(){

$("div#renderDiv").load('admin/cms/footer/footer.html');

$("#designModal").modal('hide');

});

// start styles section
$('#styles').click(function(){
console.log(' start rendered');

$("div#renderDiv").load('admin/cms/styles/styles.html', 2000, function() {
// callback after load completes
$('#viewer').load('brytweb/brytweb.css', 2000, function() {

var site = document.getElementById('viewer').innerHTML;
//var cssfile = $(this).load('brytweb/brytweb.css');
var codeStyles ="<textarea style='width:100%;height:80%' id='coders' name='coders'>" +site+ "</textarea>";
$("#designModal").modal('hide');
$('#editor').html(codeStyles);
console.log('end rendered');
console.log(codeStyles);
});
});
});



//start analytics code

$('#analytics').click(function(){
$("#profileModal").modal('hide');
$("#analyticsModal").modal('show');

});

function seeView(){

$("#processingModal").modal('show');
var anaview = document.getElementById('selview').value;

console.log(anaview);

if(anaview === "1"){
  $("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
  // callback after load completes

  $.post("admin/cms/analytics/analysis.php",{id: anaview})
  .done(function(data, status, xhr){
  console.log(data);
  $("#analyticsView").html(data);
  $("#processingModal").modal('hide');
  })
  .fail(function(data, status, xhr){
  // Runs on failure
  console.log(data);
  })
  .always(function(data, status, xhr){
  // Both success and failure
  console.log(data);
  });

console.log(navigator)

  });
}
else if (anaview === "2") {
$("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
// callback after load completes

$.post("admin/cms/analytics/analysis.php",{id: anaview})
.done(function(data, status, xhr){
console.log(data);
$("#analyticsView").html(data);
$("#processingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

console.log(navigator);



});

}
else if (anaview === "3") {
$("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
// callback after load completes

$.post("admin/cms/analytics/analysis.php",{id: anaview})
.done(function(data, status, xhr){
console.log(data);
$("#analyticsView").html(data);
$("#processingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

console.log(navigator);



});
}
else if (anaview === "4") {
$("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
// callback after load completes

$.post("admin/cms/analytics/analysis.php",{id: anaview})
.done(function(data, status, xhr){
console.log(data);
$("#analyticsView").html(data);
$("#processingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

console.log(navigator);



});
}
else if (anaview === "5") {
$("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
// callback after load completes

$.post("admin/cms/analytics/analysis.php",{id: anaview})
.done(function(data, status, xhr){
console.log(data);
$("#analyticsView").html(data);
$("#processingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

console.log(navigator);



});
}
else if (anaview === "6") {
$("div#renderDiv").load('admin/cms/analytics/analytics.html', 5000, function() {
// callback after load completes

$.post("admin/cms/analytics/analysis.php",{id: anaview})
.done(function(data, status, xhr){
console.log(data);
$("#analyticsView").html(data);
$("#processingModal").modal('hide');
})
.fail(function(data, status, xhr){
// Runs on failure
console.log(data);
})
.always(function(data, status, xhr){
// Both success and failure
console.log(data);
});

console.log(navigator);



});
}

$("#analyticsModal").modal('hide');

};

//start settings code

$('#settings').click(function(){


$("div#renderDiv").load('admin/cms/settings/settings.php');


$("#profileModal").modal('hide');

});




//start seo code

$('#seo').click(function(){

$("div#renderDiv").load('admin/cms/seo/seo.html');


$("#profileModal").modal('hide');

});





//start profile code

$('#profile').click(function(){

$("#profileModal").modal('show');

});
