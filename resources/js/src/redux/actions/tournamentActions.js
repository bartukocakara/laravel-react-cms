import axios from "axios";
import { users } from "../constants/UserConstants";

export const getTournamentList = () => async dispatch => {
    try{
        const res = await axios.get(`https://jsonplaceholder.typicode.com/users`);

        dispatch({
            type: users.getUsers,
            payload: res.data
        });

    }catch(e) {

        dispatch({
            type: users.errorUsers,
            payload: console.log(e)
        });
    }
};