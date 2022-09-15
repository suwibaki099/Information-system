const router = require("express").Router();
const User = require("../model/User");

//register
router.get("/register", async (req,res)=> {
    const user = await new User({
        username: "Ellaine",
        email: "yonchanlai@gmail.com",
        password: "12345678"
    })
    
    await user.save();
    res.send("ok")
});

module.exports = router;    