<x-app-layout>
    


        <div style="padding-left: 35%; padding-top: 10%;">


            <div style="padding-left:10%">

            <a class="home" href="{{url('/')}}">Take me Home</a>

            <a class="view_post" href="{{url('view_post')}}">View My Post</a>

        </div>

  



 <br><br> 

            <label class="add_post">Add a Post</label>
            
            <br><br>

            <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="upload_post">

                <div>
                    
                    <label>Description</label>
                 

                <textarea name="description" style="width: 300px; height: 120px;" required></textarea>

                </div>

                 <br><br>

                <div>
                    
                    <label>Upload a Image</label>
                <input type="file" name="image">

                </div>

                <br><br>

                <div>
                    <input type="submit" style="background: skyblue; cursor: pointer; padding: 10px; border-radius: 10px;" value="Add Post">
                </div>

            </div>
                
            </form>

        </div>



</x-app-layout>
