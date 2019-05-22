//Java Discussion for Week 5

public interface House {
    void heat();
    void lockToggle();
    void cool();
}

public interface Vehicle {
    void drive();
    void park();
    void lock();
}


public class Home implements House {
    private boolean locker;

    @Override
    public void heat()) {
        System.out.println("Temperature Increased");
    }

    @Override
    public void cool() {
        System.out.println("Temperature Decreased");
    }

    @Override
    public void lockToggle() {
        if(locker == false){
          System.out.println("Home Locked");
        } else { System.out.println("Home Unlocked");}

    }
}

public class RV implements Vehicle and House {
  private boolean locker;


  @Override
  public void heat()) {
      System.out.println("Temperature Increased");
  }

  @Override
  public void cool() {
      System.out.println("Temperature Decreased");
  }

  @Override
  public void lockToggle() {
      if(locker == false){
        System.out.println("Home Locked");
      } else { System.out.println("Home Unlocked");}

      @Override
      public void drive()) {
          System.out.println("Driving");
      }

      @Override
      public void park() {
          System.out.println("Parked");
      }

      @Override
      public void lock()) {
          lockToggle();
      }

  }

    public static void main (String[] args) {
        RV Winnebago = new RV();
        Home Ranch = new Home();

        Winnebago.drive();
        Winnebago.park();
        Winnebago.lockToggle();
        Winnebago.lock();//reruns lockToggle
        Ranch.heat();
        Ranch.cool();
        Ranch.lockToggle();

    }
}
