var checkstart = false ;
// button vao`
function startup(id){
	$("div#ordertable").addClass("hidden");
	$("div#detailtable").removeClass("hidden");
	$("#ban").html(id);
	var ban = "ban"+id;

//đổ giữ liệu từ cookie ra bảng
					   $.ajax({
					        type:'post',
					          url: "ajaxcall.php",
					        data:{
					          tableid:ban

					        },
					        success:function(response) {
					        	var obj = JSON.parse(response);
					       		$("#joindate").html(obj.datajoin);
					       		$("#ordertab").html(obj.table);
					        }
					      });

     


}
function startorder(){
	var date = new Date().toLocaleString();
	$("#joindate").html(date);
	checkstart = true;
}

	// Button ket thuc
function endup(){
	var date = new Date().toLocaleString();
	$("#leftdate").html(date);
}

	// button huy ban
function removedt(){
	alert("Tất cả dữ liệu đã bị hủy");
	$('#joindate').html(" ");
	$('#leftdate').html(" ");
	$('#databody').html(" ");
	$('table tbody tr td .task input:checkbox').prop('checked',false);
}

//  check box them data table
$(document).ready(function() {
	
	var tbid = '';
	 
	 	$(':checkbox').on('change', function() {
		var $this = $(this);
		

		if (this.checked) {
			var str = $this.val();
			var pos = $this.val().indexOf("|");
			var prname = str.substr(0,pos);
			var prprice = str.substr(pos+1,str.length);
			$('#databody')
			.append('<tr id="tr_'+ $this.data('ref')+'" tabindex="0" data-cb="' + $this.data('ref') + '" class="itemadd iteamqty" style="cursor:pointer;"><td >'+ $this.data('ref')+'</td><td class="prname">'+prname+'</td><td >'+prprice+'</td><td class="pr-qty">1</td><td class="prprice">'+prprice+'</td></tr>');


		} else {
			removeCheckedResult($('.itemadd[data-cb=' + $this.data('ref') + ']'));

		}

	    // var totalChecked = $('input[type=checkbox][class=mainlist]:checked').length >= 2;
	    // $('input[type=checkbox][class=mainlist]:not(:checked)').prop('disabled', totalChecked);
	});

// add data vao input=text
$(document).on('click', '.iteamqty', function() {
	var price = 0;
	var name = $(this)
	.find(".prname")
	.text();

	$('#editqty').val(name);
	tbid = $(this).attr('id');

});

$(document).on('click', '#huymon', function() {
	$("#"+tbid).remove();
	$('#editqty').val(" 	");
});

// Tang giam so luong /// flus or sub caculator
$(document).on('click', '.number-spinner button', function () {
	var btn = $(this),
	oldValue = btn.closest('.number-spinner').find('input').val().trim(),
	newVal = 0;

	var total = 0;
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;

	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;

		} else {
		newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);

	// update quantity table data

	$("#"+tbid+ " td").eq(3).html(newVal);

// update price data
var prqty = $("#"+tbid+ " td").eq(2).html();
prqty *= newVal;
total += prqty;
$("#"+tbid+ " td").eq(4).html(total);
var bill = 0;

   
    $('#ordertab tbody tr').each(function () {
        bill += +$('td', this).eq(4).text(); //+ will convert string to number
    });
  	$('#totalbill').html(bill);


				var ban = $('#ban').html();
				var joindate =$('#joindate').html();
				var tabledata = $('#ordertab').html();
  					 $.ajax({
					        type:'post',
					          url: "ajaxcall.php",
					        data:{
					          datatable:tabledata,
					          ban:ban,
					          joindate:joindate

					        },
					        success:function(response) {
					       alert(response);
					        }
					      });




		

});



// uncheck data menu
function removeCheckedResult($child) {
	$child.remove();
	$('input[class=mainlist][data-ref=' + $child.data('cb') + ']').prop('checked', false).trigger('change');

}
});



//random color
$(document).ready(function(){
	var colors = ['#03dac6', '#f48fb1','#ce93d8','#d1c4e9','#bbdefb','#cddc39','#ffb74d','#eeeeee','#b0b3c5'];
	var random_color = colors[Math.floor(Math.random() * colors.length)];
	$('.menu-right').css('background-color',random_color);
});





$(document).ready(function(){
				$(document).on('click', '#test', function() {
				var ban = $('#ban').html();
				var joindate =$('#joindate').html();
				var tabledata = $('#ordertab').html();
				// var array = [];
				// var headers = [];
			// $('#ordertab thead tr th').each(function(index, item) {
			//     headers[index] = $(item).html();
			// });
			// $('#ordertab tbody tr').has('td').each(function() {
			//     var arrayItem = {};
			//     $('td', $(this)).each(function(index, item) {
			//         arrayItem[headers[index]] = $(item).html();
			//     });
			//     array.push(arrayItem);
			// });
			
					   $.ajax({
					        type:'post',
					          url: "ajaxcall.php",
					        data:{
					          datatable:tabledata,
					          ban:ban,
					          joindate:joindate

					        },
					        success:function(response) {
					       alert(response);
					        }
					      });

     


			});
});
//resources.php


