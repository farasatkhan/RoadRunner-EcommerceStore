function removeProduct(id)
{
   var confirmBox = confirm("Are you sure you want to delete this record?");
   
   if(confirmBox == true)
   {
        window.location.assign("/admin_removeProducts?id=" + id);
   }
}