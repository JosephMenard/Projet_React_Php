import {useParams} from "react-router-dom";
import {useEffect} from "react";

export default function Wildcards() {
    const params = useParams();

    return <h1>Coucou les wildcards : {params.name}</h1>
}
