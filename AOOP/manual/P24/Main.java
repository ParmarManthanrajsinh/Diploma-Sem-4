class InsufficientBalanceException extends Exception{
    @Override
    public String getMessage(){
        return "Insufficient Balance";
    }
}

class Bank{
    int amount;

    Bank(int amount){
        this.amount = amount;
    }

    void deposit(int amount){
        this.amount += amount;
    }

    void withdraw(int amount) throws InsufficientBalanceException{
        if(this.amount < amount){
            throw new InsufficientBalanceException();
        }
        this.amount -= amount;
    }

    void checkBalance(){
        System.out.println("Balance: " + amount);
    }

}

public class Main {
    public static void main(String[] args) {
        Bank bank = new Bank(1000);
        bank.checkBalance();
        try{
            bank.withdraw(500);
            bank.checkBalance();
            bank.withdraw(1000);
            bank.checkBalance();
        }catch(InsufficientBalanceException e){
            System.out.println(e.getMessage());
        }
    }
}