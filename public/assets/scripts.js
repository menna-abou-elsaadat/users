window.onload=function(){
	const image_input = document.querySelector('#image_input');
	var uploaded_image = '';

	image_input.addEventListener("change",function(){
		var val = $(this).val().toLowerCase();
            regex = new RegExp("(.*?)\.(png|jpg|jpeg)$");
        if (!(regex.test(val))) {
            $(this).val('');
            alert('Please select correct file format (png, jpg, jpeg)');
            return;
        }
		const reader = new FileReader();
		reader.addEventListener("load",()=>{
			uploaded_image = reader.result;
			document.querySelector("#display_image").style.backgroundImage =`url(${uploaded_image})`;
		});
		reader.readAsDataURL(this.files[0]);
	})
}