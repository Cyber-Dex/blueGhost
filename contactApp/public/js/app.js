let modifyBtns = document.getElementsByClassName('modify');
    for(let i =0; i < modifyBtns.length; i++)
    {
        modifyBtns[i].addEventListener('click', function (){
            window.location.href = "/update?name="+modifyBtns[i].id;
        })
    }

let deleteBtns = document.getElementsByClassName('delete');
    for(let i =0; i < deleteBtns.length; i++)
    {
        deleteBtns[i].addEventListener('click', function (){
            window.location.href = "/delete?name="+deleteBtns[i].id;
        })
    }
