import React from "react";
import {Navigate} from "react-router-dom";

export interface INeedAuthProps {
    username: string,
    children: JSX.Element
}

export default function NeedAuth(props: INeedAuthProps) {
    if (props.username !== "") {
        return props.children
    } else {
        return <Navigate to={"/login"}/>
    }
}
