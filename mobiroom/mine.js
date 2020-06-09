const app = new Vue({
  el: '.invoice-box',
  data: {
    items: [],
    // First option will be selected by default
    Name : '', 
    PriceMin : 0,  
    PriceMax : 1000000,        
    selectedCountBedrooms : 0,        
    selectedCountBathrooms : 0,        
    selectedCountStoreys : 0,      
    selectedCountGarages : 0,  
  },
  methods: {
        onChange: function() {
          this.ajax();
		    },
        onBlur: function() {
          this.ajax();
        },            
        ajax: function(){
          this.spin();
          axios
            .get('http://127.0.0.1:8080/laravelroom/api/rooms?name='+this.Name+'&pricemin='+this.PriceMin+'&pricemax='+this.PriceMax+'&bedrooms='+this.selectedCountBedrooms+'&bathrooms='+this.selectedCountBathrooms+'&storeys='+this.selectedCountStoreys+'&garages='+this.selectedCountGarages)          
            .then(response => {
              this.items = response.data.table;
              this.unSpin();
            }); 
        }, 
        spin:function() {
           $('#spinner').css('z-index', 100).css('opacity', 0.5);
           $('.inner').html('<span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>');
        },

        unSpin:function() {
           $('#spinner').css('z-index', -100).css('opacity', 0);
           $('.inner').empty();
        },           
  },  
  mounted() {
    this.ajax();
  },  
});
