#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){  //　&　と　==　の演算子の優先順位を求める機能通りにするため
    printf("%d は偶数です\n", n);
  }else{
    printf("%d は奇数です\n", n);
  }
  return 0;
}
