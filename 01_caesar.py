again=input("If you want to encrypt/decrypt password enter yes, not Enter no : ")
while(again=="yes"):
    n=input("Enter Your choice (Encrypt=1 Decrypt=2) : ")
    if(n=="1"):
      plaintext=input("Enter Password : ")
      alphabet="abcdefghijklmnopqrstuvwxyz"
      k=3
      cipher=''
      for c in plaintext:
         if c in alphabet:
           cipher +=alphabet[(alphabet.index(c)+k)%(len(alphabet))]
      print('Your encrypted msg is : ' + cipher)
    elif(n=="2"):
      plaintext=input("Enter Password : ")
      alphabet="zyxwvutsrqponmlkjihgfedcba"
      k=3
      cipher=''
      for c in plaintext:
         if c in alphabet:
           cipher +=alphabet[(alphabet.index(c)+k)%(len(alphabet))]
      print('Your decrypted msg is : ' + cipher)
    else:
        print("Wrong Choice")

        
    again=input("If you want to encrypt/decrypt password again enter yes, not Enter no : ")
