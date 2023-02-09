type Test = `${string}-${string}`
type MaybeTest = Test | undefined

export function test(value: MaybeTest) {
    if (value === undefined) {
        console.log('undefined')
    }

    if (typeof value === 'string') {
        console.log('string')
    }
}