import {Outlet} from "react-router-dom";

export default function Products() {
    return (
        <div style={{background: "chartreuse"}}>
            <h2>Coucou les produits</h2>

            <Outlet/>

            <h4>la suite</h4>
        </div>

    )

}
