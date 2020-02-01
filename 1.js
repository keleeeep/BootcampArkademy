
function profile(name,age){
    const address = "Depok"
    const hobbies = ['Soccer','Vacation']
    const is_marriage = false
    const list_school = [{"name" : "Gunadarma University"},{"year_in" : 2015},{"year_out":2019},{"major" :"S1"}]
    const skills = [{"skill_name" : "Software Developer"},{"level":"advance"}]
    const interest_in_coding = true
    let data = {
              "name" : name,
              "age" : age,
              "Address" : address,
              "Hobbies" : hobbies,
              "is_marriage" : is_marriage,
              "list_school" : list_school,
              "skills" : skills,
              "interest_in_coding": interest_in_coding
             
            }
    return data
    }
    
    var object = JSON.stringify(profile("Alvin",22))
    
    console.log(object)