import {ChangeEvent, Dispatch, SetStateAction, useState} from "react";
import {useLocation, useNavigate} from "react-router-dom";

export interface IFormData {
    username: string,
    password: string
}

export interface IConnectProps {
    setUsername: Dispatch<SetStateAction<string>>
}

export default function Connect({setUsername}: IConnectProps) {

    const navigate = useNavigate()
    const location = useLocation()

    console.log(location)

    const [formData, setFormData] = useState<IFormData>({password: "", username: ""})

    const handleChange = (e: ChangeEvent) => {
        setFormData(prevState => {
            return {
                ...prevState,
                // @ts-ignore
                [e.target.name]: e.target.value
            }
        })
    }

    const handleSubmit = (e: any) => {
        e.preventDefault()
        setUsername(formData.username)
        navigate("/")
    }

    return (
        <form onSubmit={handleSubmit}>
            <input type="text" name='username' onChange={handleChange}/><br/>
            <input type="password" name="password" onChange={handleChange}/><br/>
            <button type="submit">Gooooo</button>
        </form>
    )

}
