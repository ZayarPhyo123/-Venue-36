// image pop-up
function myFunction(id) 
		{
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption

			var img = document.getElementById(id);
			var modalImg = document.getElementById("img01");
			// var captionText = document.getElementById("caption");
			modal.style.display = "block";
			modalImg.src = img.src;
			// captionText.innerHTML = this.alt;
			
			
			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];
			var zz = document.getElementsByClassName("modal")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			zz.onclick = function() { 
			modal.style.display = "none";
			}
		}