function valid(){
    var name=document.myform.desc.value;
    var video=document.myform.vide.value;
    var a=name.split(" ").length;
    var x=video.split(".").pop().toLowerCase();
    var videoar=["mp4","3gp","avi"];
    var x=videoar.indexOf(x);

    if (a>8){
        alert("Description words must not be more than 8");
        return false;
    }else if(x<0){alert("video format must be mp4, 3gp or avi");
    return false;}


}