function isPrime(n){
  let count = 1;
  
  for (let i = 2; i <= n; i++){
    if (n % i == 0){
      count++;
    }
    //console.log("You are briliant");
  }
  //console.log(count);
  if (count > 2){
    console.log("The number is not prime");
  } else {
    console.log("The number is prime");
  }
  //return count;
}
isPrime(7);