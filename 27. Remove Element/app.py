class Solution(object):
    nums = [3, 2, 1, 3]
    val = 3

    def removeElement(self):
        self.nums = [num for num in self.nums if num != self.val]
        return self.nums

solution = Solution()
result = solution.removeElement()
print(result)

