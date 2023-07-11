<div class="nav-search" id="nav-search" style="position: relative;margin-bottom:10px;display: flex;flex-direction: row-reverse;">
    <form class="form-search">
        <span class="input-icon">
            <input type="text" onkeyup="searchFunction()" placeholder="Search ..." class="nav-search-input" id="input" autocomplete="off">
            <i class="ace-icon fa fa-search nav-search-icon"></i>
        </span>
    </form>
</div>

<ul class="list-group" id="all-centers">
{data}
    <li class="list-group-item">
    <label class="middle" style="width: 100%;">
        {input}
        <!--input type="checkbox" class="ace" name="centers[]" value="{id}" {checked}/-->
        <span class="lbl" style="width: 100%;"> {title}</span>
    </label>
    </li>
{/data}
</ul>
<div class="alert alert-danger" id="messageCenter" style="display:none">No Center Found</div>


<script>
function searchFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    // console.warn(filter);
    ul = document.getElementById("all-centers");
    li = ul.getElementsByTagName("li");
    var MessageBox = document.getElementById('messageCenter');
    var f = 0;
    for (i = 0; i < li.length; i++) {
        // console.warn(li[i]);
        a = li[i].getElementsByTagName("span")[0];
        // console.log(a);
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            // console.log(filter);
        } else {
            console.log('n');
            li[i].style.display = "none";
            f++;
        }        
    }
    
    MessageBox.style.display = (f === li.length) ? 'block' : 'none';
}
</script>