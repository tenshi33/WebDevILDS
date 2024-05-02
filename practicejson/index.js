fetchData()

async function fetchData(){
    try{
        const response = await fetch("https://pokeapi.co/api/v2/pokemon/ditto");
        if(!response.ok){
            throw new error("no");
        }
        const data = await response.json;
        console.log(data)

    }catch(error){
        console.log(error)
    }
}