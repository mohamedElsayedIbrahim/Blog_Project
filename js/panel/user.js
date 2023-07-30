async function get_api_data()
{
    let response =await  fetch('http://localhost/blog/api/users/list.php');
    let data = await response.json();

    console.log(data);

}

get_api_data();