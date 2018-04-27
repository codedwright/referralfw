
<input 
    class="col-9 form-control" 
    type="text" 
    value="SEARCH" 
    name="s" 
    onblur="if (this.value == '') { this.value = 'SEARCH'; }" 
    onfocus="if (this.value == 'SEARCH') { this.value = ''; }">

<button class="col-2 offset-1 form-control" type="submit">
    <i class="fa fa-search"></i>
</button>
