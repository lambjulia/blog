<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro Login</title>

    <section class="vh-100" style="background-color: black;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
          
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  
                  <h3 class="mb-5">Crie seu Login</h3>
      
                  
                  
                
                  <div class="form-outline mb-4">

                    <form action="/cadastro" method="post">
                      @csrf
                    <input name="name"  type="text" placeholder="Nome" class="form-control form-control-lg" required />
                   
                  </div>
                  <div class="form-outline mb-4">
                  <input name="email"  type="email" placeholder="Email" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input name="password" type="password" placeholder="Senha" class="form-control form-control-lg" required />
                    
                  </div>
      
            
                  
      
                  <button class="btn btn-dark" type="submit">Cadastrar</button><br>
      
                </form>

                

            
      
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </html>