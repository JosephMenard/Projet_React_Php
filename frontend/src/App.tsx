import React, {useEffect, useState} from 'react';
import logo from './logo.svg';
import './App.css';
import {BrowserRouter, Link, NavLink, Route, Routes} from "react-router-dom";
import Home from "./Routes/Home";
import Details from "./Routes/Details";
import Products from "./Routes/Products";
import MicroWave from "./Routes/MicroWave";
import Frigo from "./Routes/Frigo";
import Truc from "./Routes/Truc";
import Wildcards from "./Routes/Wildcards";
import Form from "./Routes/Form";
import NeedAuth from "./Routes/NeedAuth";
import Connect from "./Routes/Connect";
import Protection from "./Routes/Protection";

function App() {
    const [username, setUsername] = useState<string>("")

    return (
        <BrowserRouter>
            <div>
                <h1>Coucou les enfants</h1>
                <ul>
                    <li><NavLink to={"/"}>Home</NavLink></li>
                    <li><NavLink to={"/protected"}>Protected</NavLink></li>
                    <li><NavLink to={"/details"}>Details</NavLink></li>
                </ul>
            </div>
            <div>
                <Routes>
                    <Route path={'/'} element={<Home/>
                    }/>
                    <Route path={'/protected'} element={
                        <NeedAuth username={username}>
                            <Protection/>
                        </NeedAuth>
                    }/>
                    <Route path={'/details'} element={
                        <NeedAuth username={username}>
                            <Details/>
                        </NeedAuth>
                    }/>
                    <Route path={"/login"} element={<Connect setUsername={setUsername}/>}/>
                </Routes>
            </div>
        </BrowserRouter>

    );
}

export default App;
