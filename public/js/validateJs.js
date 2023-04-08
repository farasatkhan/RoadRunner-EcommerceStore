function validateAddProductFrom()
{
    var val = document.querySelector('input[id="sizes"]').value;
    val = val.split(',')
    for( var i=0; i<val.length;i++)
        if( !Number.isInteger(parseInt(val[i].trim())))
                {   alert("Invalid sizes!")
                    return false;}
    return true;
} 