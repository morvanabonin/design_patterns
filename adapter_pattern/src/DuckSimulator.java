public class DuckSimulator {

    //principal class
    public static void main (String[] a)
    {
        //Test a duck
        Duck duck = new MallardDuck();
        testDuck();
    }

    static void testDuck(Duck duck) {
        duck.quack();
        duck.fly();
    }
}
