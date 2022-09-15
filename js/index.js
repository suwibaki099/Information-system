const express = require("express");
const app = express();
const mongoose = require("mongoose");
const dotenv = require("dotenv");
const helmet = require("helmet");
const morgan = require("morgan");
const userRoute = require("../routes/user");
const authRoute = require("../routes/auth");

dotenv.config();

mongoose.connect(process.env.MONGO_URL, {userNewUrlParser: true, useUnifiedTopology: true}, ()=> {
    console.log("connected to MongoDB")
});

//midlleware
app.use(express.json())
app.use(helmet());
app.use(morgan("common"));

app.use("/api/user", userRoute);
app.use("/api/auth", authRoute);                
            

app.listen(3000,()=>{
    console.log("Backend server is running")
});