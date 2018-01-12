// JavaScript for slider

	var sliderindex=0; /* anfang ,muss das index = 0*/
	 /*slideshow();  braucht nicht, weil schon ins body geruft.*/
	function slideshow()
	{
		var x=document.getElementsByClassName("slide");
		for(i=0;i<x.length;i++)
			{
				x[i].style.display="none";
			}
			sliderindex++;
			if(x.length<sliderindex)
				{
					sliderindex=1;
				}
				x[sliderindex-1].style.display="block";
				setTimeout(slideshow,5000);

	}
