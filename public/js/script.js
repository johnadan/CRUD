//let postId = 0;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// user crud

//edit modal
$('#editPost').on('click', function() {
	//console.log('It works!');
	//postId = dataset['postid'];
	let postBody = $("#post-body").val();
	$('#edit-modal').modal();
});

//initial edit post
//$("#savePost").on('click', function(){
	//let postBody = $("#post-body").val();
	//$.ajax({
		//'url' : '/editpost',
		//'type' : 'POST',
		//'data' : {
			//_token : '{{ csrf_token() }}',
			//'post-body' : postBody
			//'post_id' : ,
			//'' :
		//},
		//'success':function(data){
			//alert("Your post was successfully edited!");
			//console.log("Your post was successfully edited!");
		//} 
	//})
//});

//for testing - edit post

$("#savePost").on('click', function(){
	//let postBody = $("#post-body").val();
	$.ajax({
		'type': 'POST',
		'url': '/editpost',
		'data': {
			//_token : '{{ csrf_token() }}',
			'post-body': $('#post-body').val(),
			//_token: token
			//postId : 'postId'
			//'post_id' : ,
			//'' :
		},
		'success' : function(data){
			console.log(msg['post-body']);
		}
	})
});

// $.ajax({
// method: 'POST',
// url:url,
// data:
// {
// post-body: $('#post-body').val(), 
// post_id: '', 
// _token: token
// }
// })
// .done(function (msg) {
// console.log(msg['message']);
// }); 

// admin crud

//add new user
// $("#add").click(function() {
// $.ajax({
//         type: 'post',
//         url: '/addItem',
//         data: {
//             '_token': $('input[name=_token]').val(),
//             'name': $('input[name=name]').val()
//         },
//         success: function(data) {
//             if ((data.errors)) {
//                 $('.error').removeClass('hidden');
//                 $('.error').text(data.errors.name);
//             } else {
//                 $('.error').remove();
//                 $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
//             }
//         },
//     });
//     $('#name').val('');
// });