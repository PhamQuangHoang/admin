

var checkstart = false ;
// button vao`
	function startup(id){


		   $("div#ordertable").addClass("hidden");
		   $("div#detailtable").removeClass("hidden");
		   $("#ban").html(id);




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
	alert("asdasd");
	$('#joindate').html(" ");
	$('#databody').html(" ");
  $('table tbody tr td .task input:checkbox').removeAttr('checked');

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
	            .append('<tr id="tr_'+ $this.data('ref')+'" tabindex="0" data-cb="' + $this.data('ref') + '" class="itemadd iteamqty" style="cursor:pointer;"><th >'+ $this.data('ref')+'</th><td class="prname">'+prname+'</td><td >'+prprice+'</td><td class="pr-qty">1</td><td class="prprice">'+prprice+'</td></tr>');

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

$("#"+tbid+ " td").eq(2).html(newVal);

// update price data
var prqty = $("#"+tbid+ " td").eq(1).html();
prqty *= newVal;
total += prqty;
$("#"+tbid+ " td").eq(3).html(total);

	});



// uncheck data menu
	function removeCheckedResult($child) {
	    $child.remove();
	    $('input[class=mainlist][data-ref=' + $child.data('cb') + ']').prop('checked', false).trigger('change');

	}
});
