
public class Sequence {

    private static int num;
    private static int effic;

    public static int getNum() {
        return num;
    }

    public static int computeIterative(int n) {
        effic = 0;

        int val[] = new int[n + 2];
        val[0] = 0;
        val[1] = 1;

        for (int i = 2; i <= n; i++) {
            effic++;
            val[i] = 2 * val[i - 1] + val[i - 2];

        }

        num = val[n];
        return num;
    }

    public static int computeRecursive(int n) {
        effic++;

        if (n == 0) {
            return 0;
        } else if (n == 1) {
            return 1;
        } else {
            num = 1+ (2 * computeRecursive(n - 1) + computeRecursive(n - 2));
            return num;
        }

    }

    public static int getEfficiency() {
        return effic;

    }

    public static void reset() {
        effic = 0;
        num = 0;
    }

}
