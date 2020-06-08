$(function(){
  var $xvote,id_files,div_id,$vote;
 $(".vote .vote1").click(function (e) {
  e.preventDefault();
   id_files=$(this).data('id_files');
   div_id='#file'+id_files;
   $vote= $(div_id);
   $xvote=$vote[0].dataset.x_vote;
    //alert('av+ $a '+$a+'$xvot '+$xvote+'div_id'+div_id);
    vote(1,$xvote,id_files,$vote);
    //alert('ap+ $a '+$a+'$xvot '+$xvote);
    });
  $(".vote .vote-1").click(function (e) {
    e.preventDefault();
     id_files=$(this).data('id_files');
     div_id='#file'+id_files;
     $vote= $(div_id);
     $xvote=$vote[0].dataset.x_vote;
    //alert('av- $a '+$a+'$xvot '+$xvote+'div_id'+div_id);
    vote(-1,$xvote,id_files,$vote);
    //alert('ap- $a '+$a+'$xvot '+$xvote);
    });
  });
function select_elt(elt){
  id_files=$(this).data('id_files');
  div_id='#file'+id_files;
  $vote= $(div_id);
  return $vote ;
}
function vote(value,xvote,id_files,vote){
    $.post('like.php',{
      id_files: vote.data('id_files'),
      id_user: vote.data('id_user'),
      vote_type:value
    })
    .done(function( data, textStatus, jqXHR ) {
      $('#likes_count'+id_files).text(data.likes_count);
      $('#dislikes_count'+id_files).text(data.dislikes_count);
      if (value == xvote) {
        vote.removeClass('is_liked is_disliked');
        vote[0].dataset.x_vote = '2';
        //alert('classremouved ');
      }
      else if (value == 1) { 
        vote.removeClass('is_disliked');
        vote.addClass('is_liked');
        vote[0].dataset.x_vote = '1';
        //alert('vote1');
      }
      else{
        vote.removeClass('is_liked');
        vote.addClass('is_disliked');
        vote[0].dataset.x_vote = '-1';
        //alert('vote-1');
      }
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
      console.log(jqXHR);
    });
    return true ;
  }