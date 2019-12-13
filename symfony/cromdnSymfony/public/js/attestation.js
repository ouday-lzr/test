$(function()
{		
	$('#attestation').change(function()
	{
		var id=$('#attestation').val();
		console.log(id);
		if(id==10)
		{
			//$('#formulaire').empty();
			$('#formulaire').append('<label class="col-form-label">Date de convocation :</label><br>');		
			$('#formulaire').append('<input type="text" name="rdv"><br>');
		}
		else
		{
			$('#formulaire').empty();
		}
	});	
});