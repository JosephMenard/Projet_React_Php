import {useState} from "react";
import {useNavigate} from "react-router-dom";

export default function Form() {

    const navigate = useNavigate()

    const [search, setSearch] = useState<string>("")

    const handleSubmit = (e: any) => {
        e.preventDefault();
        navigate("/details/" + search)
    }

    return (
        <form onSubmit={handleSubmit}>
            <input type="text" name="search" onChange={e => setSearch(e.target.value)}/>
            <button type={"submit"}>Searchhhhhhh !</button>
        </form>
    )
}
