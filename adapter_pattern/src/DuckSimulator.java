public class DuckSimulator {

    //principal class
    public static void main (String[] a)
    {
        //Test a duck
        Duck duck;
        duck = new MallardDuck();
        testDuck(duck);

        //Test a turkey
        Turkey turkey = new WildTurkey();
        Duck turkeyAdapter = new TurkeyAdapter(turkey);
        testDuck(turkeyAdapter);
    }

    static void testDuck(Duck duck) {
        duck.quack();
        duck.fly();
    }
}

