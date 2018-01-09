$(document).ready(function() {
	s = new slider("#galerie");	
});

var slider = function(id) {
	self=this;
	this.div = $(id);
	this.slider = this.div.find(".slider");
	this.largeurCache = this.div.width();
	this.largeur = 0;
	this.div.find('img').each(function() {
		self.largeur+= $(this).width();
		self.largeur+= parseInt($(this).css("margin-left"));
		self.largeur+= parseInt($(this).css("margin-right"));
	});
	this.prec = this.div.find(".prev");
	this.suiv = this.div.find(".next");
	this.saut = this.largeurCache/2;
	this.nbEtapes = Math.floor(this.largeur/this.saut - this.largeurCache/this.saut);
	this.courant = 0;

	this.suiv.click(function() {
		if(self.courant<=self.nbEtapes) {
			self.courant++;
			self.slider.animate({
				marginLeft:-self.courant*self.saut
			}, 1000);
		}
	})

	this.prec.click(function() {
		if(self.courant>0) {
			self.courant--;
			self.slider.animate({
				marginLeft:-self.courant*self.saut
			}, 1000);
		}
	})
}

document.addEventListener("keydown", function(e){
	if(e.keyCode === 37){
	    if(self.courant>0) {
			self.courant--;
			self.slider.animate({
				marginLeft:-self.courant*self.saut
			}, 1000);
		}
	   	} else if(e.keyCode === 39){
	       	if(self.courant<=self.nbEtapes) {
				self.courant++;
				self.slider.animate({
					marginLeft:-self.courant*self.saut
				}, 1000);
			}
	   	}
});